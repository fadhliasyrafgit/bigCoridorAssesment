## Readme file



# below is the steps required.


1.Run git clone https://github.com/fadhliasyraf/bigCoridorAssesment.git

2.Run composer install

3.Run cp .env.example .env

4.Run php artisan key:generate

5.Create a database called "bigcorridorassessmentdb" in localhost

6.Make necessary update on db config if needed in .env file

7.Run php artisan migrate

8.Run rm -rf public/storage

9.Run php artisan storage:link

10.Run php artisan db:seed

11.Run php artisan serve

12.Go to link localhost:8000
