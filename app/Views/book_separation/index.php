<?= $this->extend('base_view') ?>
<?= $this->section('content') ?>
<?php
helper('form');
function checkbox($data = '', string $value = '', bool $checked = false, $extra = ''): string
{
    $defaults = [
        'type' => 'checkbox',
        'name' => (!is_array($data) ? $data : ''),
        'value' => $value,
        'class' => "uk-checkbox",
    ];

    if (is_array($data) && array_key_exists('checked', $data)) {
        $checked = $data['checked'];
        if ($checked === false) {
            unset($data['checked']);
        } else {
            $data['checked'] = 'checked';
        }
    }

    if ($checked === true) {
        $defaults['checked'] = 'checked';
    } elseif (isset($defaults['checked'])) {
        unset($defaults['checked']);
    }
    return '<label><input ' . parse_form_attributes($data, $defaults) . stringify_attributes($extra) . "> $value </label>\n";
    return '<input ' . parse_form_attributes($data, $defaults) . stringify_attributes($extra) . " />\n";
}

?>


    <style>

        #book-separation form #print {
            position: absolute;
            right: -15px;
            top: -35px;
            cursor: pointer;
        }

    </style>


    <div class="uk-container uk-container-xlarge uk-section" id="book-separation">

        <div uk-grid>
            <div class="uk-width-3-5@m uk-padding">
                <div class="uk-card">
                    <form class="uk-form-stacked">

                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-stacked-text">Name Of Work</label>
                            <div class="uk-form-controls">
                                <input class="uk-input" id="form-stacked-text" type="text" placeholder="Some text...">
                            </div>
                        </div>

                        <span id="print" uk-icon="icon: print" class="uk-icon-button uk-margin-small-right"></span>

                        <div class="uk-flex uk-flex-between uk-child-width-expand">

                            <div>
                                <div class="uk-margin">
                                    <label class="uk-form-label" for="form-stacked-text1">დონე</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" id="form-stacked-text1" type="text"
                                               placeholder="Some text...">
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="uk-margin">
                                    <label class="uk-form-label" for="form-stacked-text2">პრეფიქსი</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" id="form-stacked-text2" type="text"
                                               placeholder="Some text...">
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="uk-margin">
                                    <label class="uk-form-label" for="form-stacked-text3">ნომერი</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" id="form-stacked-text3" type="text"
                                               placeholder="Some text...">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-margin">
                                    <label class="uk-form-label" for="form-stacked-text4">სუფიქსი</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" id="form-stacked-text4" type="text"
                                               placeholder="Some text...">
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="uk-text-right">
                            <button class="uk-button uk-button-primary uk-display-inline">შენახვა</button>
                        </div>

                        <hr class="uk-divider-icon">

                    </form>


                    <table class="uk-table display" id="example" style="width:100%">
                        <thead>
                        <tr>
                            <th>დონე</th>
                            <th>პრეფიქსი</th>
                            <th>ნომერი</th>
                            <th>სუფიქსი</th>
                            <th>ქმედება</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach (range(1, 5) as $item): ?>
                            <tr>
                                <td><?= $item ?> დონე</td>
                                <td><?= $item ?> პრეფიქსი</td>
                                <td><?= random_int(1, 999) ?></td>
                                <td><?= $item ?> სუფიქსი</td>
                                <td class="uk-text-center"><a class="uk-text-danger" title="წაშლა" href="" uk-icon="icon: trash"></a></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>


                </div>
            </div>
            <div class="uk-width-2-5@m ">
                <div class="buttons uk-flex uk-flex-around uk-padding">
                    <div class="uk-button uk-button-danger">გაუქმება</div>
                    <div class="uk-button uk-button-primary">შენახვა</div>
                </div>

                <div class="dates">
                    <div class="uk-flex uk-flex-between">
                        <div>
                            <label for="start_day">საწყისი დღე</label>
                            <input name="start_day" class="uk-input" id="start_day" type="number" min="1" max="31">
                        </div>
                        <div>
                            <label for="start_month">საწყისი თვე</label>
                            <select name="start_month" class="uk-select" id="start_month">
                                <option value="">აირჩიე თვე</option>
                                <option value="1">იანვარი</option>
                                <option value="2">თებერვალი</option>
                                <option value="3">მარტი</option>
                                <option value="4">აპრილი</option>
                                <option value="5">მაისი</option>
                                <option value="6">ივნისი</option>
                                <option value="7">ივლისი</option>
                                <option value="8">აგვისტო</option>
                                <option value="9">სექტემბერი</option>
                                <option value="10">ოქტომბერი</option>
                                <option value="11">ნოემბერი</option>
                                <option value="12">დეკემბერი</option>
                            </select>
                        </div>
                        <div>
                            <label for="start_year">საწყისი წელი</label>
                            <input name="start_year" class="uk-input" id="start_year" type="number" min="1000" max="9999">
                        </div>
                    </div>
                    <div class="uk-flex uk-flex-between" style="margin-top: 40px">
                        <div>
                            <label for="start_day">საბოლოო დღე</label>
                            <input name="start_day" class="uk-input" id="start_day" type="number" min="1" max="31">
                        </div>
                        <div>
                            <label for="start_month">საბოლოო თვე</label>
                            <select name="start_month" class="uk-select" id="start_month">
                                <option value="">აირჩიე თვე</option>
                                <option value="1">იანვარი</option>
                                <option value="2">თებერვალი</option>
                                <option value="3">მარტი</option>
                                <option value="4">აპრილი</option>
                                <option value="5">მაისი</option>
                                <option value="6">ივნისი</option>
                                <option value="7">ივლისი</option>
                                <option value="8">აგვისტო</option>
                                <option value="9">სექტემბერი</option>
                                <option value="10">ოქტომბერი</option>
                                <option value="11">ნოემბერი</option>
                                <option value="12">დეკემბერი</option>
                            </select>
                        </div>
                        <div>
                            <label for="start_year">საბოლოო წელი</label>
                            <input name="start_year" class="uk-input" id="start_year" type="number" min="1000" max="9999">
                        </div>
                    </div>

                </div>

                <div class="nominals" style="margin-top: 50px">
                    <h1 class="uk-text-center">ნომინალები</h1>
                    <?php foreach (range(1, 7) as $checkbox): ?>
                        <div class="uk-margin">
                            <?= checkbox('one' . $checkbox, 'One' . $checkbox, true) ?>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>

    </div>
    <script>

        $(document).ready(function () {
            $('#example').DataTable({
                ordering: true
            });
        });

    </script>
<?= $this->endSection() ?>