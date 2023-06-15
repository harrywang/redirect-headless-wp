# About

This is an "empty" Wordpress theme you can install to redirect the headless Wordpress frontend while keeping the Admin login at `/wp-admin` and API endpoint at `/graphql` working.

# How to use

For example, I created a headless wordpress site using https://www.wpgraphql.com. 

- My API is working at https://www.mywordpress.com/graphql 
- My custom frontend (using Next.js) is working at https://blog.mydomian.com. 
- I want to redirect https://www.mywordpress.com to https://blog.mydomian.com
- I want to log into https://www.mywordpress.com/wp-admin to manage my content

Do the following:

1.  Open `index.php` and replace `https://blog.mydomain.com` with the URL you want to redirect to.

```
header("Location: https://blog.mydomain.com");
```

2. Zip the folder and upload the zip as a Wordpress theme and activate it - that's it!

<img width="648" src="https://github.com/harrywang/redirect-headless-wp/assets/595772/0e8acac4-4c94-4772-a265-0bab91ebce96">


# Credits

- I borrowed the code from this post: https://serverfault.com/questions/853179/redirect-all-urls-to-the-root-except-wp-admin-and-wp-json
- The theme screenshot is from https://replicable.art/asset/647b4d91414f1bb93778ab94, which is generated using AI and Stable Diffusion
