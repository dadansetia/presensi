cr=composer
cri=composer install
crd=composer dump-autoload $*
cru=composer update"

pa=php artisan $*
pamm=php artisan make:model $*
pamc=php artisan make:controller $*Controller
pakg=php artisan key:generate $*
pamt=php artisan make:test $*
pamf=php artisan migrate:fresh $*
pami=php artisan migrate $*
pads=php artisan db:seed $*
pas=php artisan serve $*
tinker=php artisan tinker

ndev=npm run dev
nprod=npm run prod
nhot=npm run hot