## slim-quickstart
a quickstart project structure for the [slim framework](https://www.slimframework.com/)

### nginx config
 - make sure change the server root to public/
 - add:
 
        location / {
          try_files try_files $uri $uri/ /index.php$is_args$args;
        }
