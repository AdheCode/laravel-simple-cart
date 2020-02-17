# Laravel Simple Point of Sale Backend API


## Task Requiremnts:
  	1. key model that need to have
		- product, consist of (name, price, category, series)
		- single product can possibly have multiple category
		- single product can possibly have multiple price depend on how much order will create
		- ability parent-child type of category
	2. Create resource to manage above scheme
	3. Create resource to search product
		- Users should be able to search on any field, full value matching is fine (e.g. "mar"
		  won't return "mary")
		- Users should also be able to search for empty values
		- Search can get pretty complicated pretty easily, we just want to see that you can code
		  a basic search application
	4. Create resource to compare multiple product
	5. Order Data
		- Create resource to create an order based on data above
		- Create resource to get list of all orders with ability to filter by order number

## Assumptions!
  - Gunakan Postman dan set Header "Accept : application/json"
  - User harus Register dan Login terlebih dahulu
  - User Dapat Register atau Login menggunakan alamat email dan password, User akan diberikan akses token saat masuk
  - User dapat membuat lebih dari satu cart
  - Terdapat Variasi/Seri Product
  - Bisa Parent Category
  - Bisa multiple harga
  - Akses Product dan Search Product bisa tanpa harus Login, tp disarankan untuk Login terlebih dahulu 
  - Tidak ada payment gateway yang terintegrasi, jadi saya berasumsi bahwa pengguna akan memasukkan informasi kartu kredit untuk checkout
  - Jumlah Item Cart Bisa 1 atau lebih.


## Language, Framework, and Datastore. Choices Made!
  - Sistem ini di implementasikan menggunakan php laravel framework 5.8
  - Mysql
  - Menggunakan RESTful API
  - Menggunakan JWT Authentication



# API documentation:


>POST   	| api/auth/login                                    
>GET|HEAD   | api/auth/me                                
>POST   	| api/auth/register         

>POST api/addresses    
>GET|HEAD  | api/addresses       
>GET|HEAD  | api/addresses/create   
>DELETE    | api/addresses/{address}   
>PUT|PATCH | api/addresses/{address}   
>GET|HEAD  | api/addresses/{address}    
>GET|HEAD  | api/addresses/{address}/edit   
>GET|HEAD  | api/addresses/{address}/shipping  

>POST api/cart                       
>GET|HEAD  | api/cart                         
>GET|HEAD  | api/cart/create                    
>GET|HEAD  | api/cart/{productVariation}      
>PUT|PATCH | api/cart/{productVariation}      
>DELETE    | api/cart/{productVariation}        
>GET|HEAD  | api/cart/{productVariation}/edit   

>GET|HEAD  | api/categories
>POST api/categories                
>GET|HEAD  | api/categories/create  
>PUT|PATCH | api/categories/{category}       
>DELETE    | api/categories/{category}          
>GET|HEAD  | api/categories/{category}         
>GET|HEAD  | api/categories/{category}/edit  

>POST api/countries                   
>GET|HEAD  | api/countries                     
>GET|HEAD  | api/countries/create               
>GET|HEAD  | api/countries/{country}            
>PUT|PATCH | api/countries/{country}             
>DELETE    | api/countries/{country}         
>GET|HEAD  | api/countries/{country}/edit   

>GET|HEAD  | api/orders                         
>POST api/orders                        
>GET|HEAD  | api/orders/create            
>DELETE    | api/orders/{order}                 
>GET|HEAD  | api/orders/{order}             
>PUT|PATCH | api/orders/{order}             
>GET|HEAD  | api/orders/{order}/edit      

>GET|HEAD  | api/payment-methods              
>POST api/payment-methods           
>GET|HEAD  | api/payment-methods/create      
>GET|HEAD  | api/payment-methods/{payment_method} 
>PUT|PATCH | api/payment-methods/{payment_method}
>DELETE    | api/payment-methods/{payment_method} 
>GET|HEAD  | api/payment-methods/{payment_method}/edit 

>POST api/products                  
>GET|HEAD  | api/products                    
>GET|HEAD  | api/products/create                
>GET|HEAD  | api/products/{product}              
>PUT|PATCH | api/products/{product}            
>DELETE    | api/products/{product}            
>GET|HEAD  | api/products/{product}/edit 
>GET 	   | api/products/search       


# Installation


```sh
$ Composer install
$ php artisan key:generate
$ php artisan migrate
$ php artisan db:seed
$ php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"
```

