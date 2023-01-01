# Laravel Rest-api (no authentication implemented)

* Main Routes
localhost::port_number/api/v1/customers
localhost::port_number/api/v1/invoices

* Queries (GET)
/api/v1/customers?type[eq]=I
/api/v1/customers?postalCode[gt]=3000
/api/v1/customers?includeInvoices=true
/api/v1/customers?type[eq]=I&includeInvoices
/api/v1/customers?type[eq]=I&postalCode[lt]=3000
/api/v1/invoices?status[eq]="V"
/api/v1/invoices?amount[lt]=3000

* To Add and update data
Postman is required. 
POST, PUT, PATCH can be used. 

Instructions
1. php artisan migrate:fresh --seed

If errors: 
1. $ composer install
2. copy .env.example and change to .env
3. php artisan key:generate
