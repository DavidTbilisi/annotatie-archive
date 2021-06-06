# Annotatie
# ბიბლიოთეკები
- [Codeigniter 4](https://github.com/codeigniter4/CodeIgniter4) ([დოკუმენტაცია](https://codeigniter.com/user_guide/intro/index.html))
- [QRCode.js](http://davidshimjs.github.io/qrcodejs/) 


---
## Issues
- [QR Code max character length](https://stackoverflow.com/questions/12764334/qr-code-max-char-length)


## Installing User Management
- `php spark migrate` to create tables and structures
- `php spark db:seed Usergroups`
- `php spark db:seed Users`


default user: `a@admin.com`\
default pass: `12345`


## User Management Service
```PHP
$auth = service('userAuth');
d($auth->check([1])); // Group ID
```
