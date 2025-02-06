# About

This is an "empty" Wordpress theme you can install to redirect the headless Wordpress frontend while keeping the Admin login at `/wp-admin` and API endpoint at `/graphql` working.

# How to use

For example, I created a headless wordpress site using https://www.wpgraphql.com. 

- My API is working at https://blog.mydomain.com/graphql 
- My custom frontend (using Next.js) is working at https://mydomain.com/blog
- I log into https://blog.mywordpress.com/wp-admin to manage my content
- I don't want users to see my content at https://blog.mydomian.com, which should be seen at https://mydomain.com/blog
- I redirect https://blog.mywordpress.com to https://mydomian.com/blog


Do the following:

1.  Open `index.php` and replace `https://mydomain.com/blog` with the URL you want to redirect to.

```
header("Location: https://mydomain.com/blog");
```

2. Zip the folder and upload the zip as a Wordpress theme and activate it - that's it!

<img width="648" src="https://github.com/harrywang/redirect-headless-wp/assets/595772/0e8acac4-4c94-4772-a265-0bab91ebce96">


# Credits

- I borrowed the code from this post: https://wordpress.stackexchange.com/questions/17969/disable-front-end-to-use-as-cms-only
- The theme screenshot is from https://replicable.art/asset/647b4d91414f1bb93778ab94, which is generated using AI and Stable Diffusion
