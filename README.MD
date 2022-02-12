# NetliPress

A framework to write a website managed by Netlify CMS and themed like a Wordpress Theme. Code can be easily migrated to
a full fledged Wordpress Theme.

## How does it work?

This framework uses Collections from Netlify CMS that are formatted as JSON. The router checks if an entry in a
collection exists, if so, it loads the data and renders the page.

This data is made available via template tags that mimic a Wordpress and ACF workflow. These tags are described further
down. The theme uses Laravel Mix to build the front-end assets.

## Get started

1. Run `composer create-project netlipress/netlipress MyProjectName`
2. Run `cd MyProjectName`
3. Run `npm install && npm run prod`
5. Create a new local domain in MAMP (or similar) that points to the `/public` directory of this project
6. Configure the CMS by filling the `/config/cms/*.json` files. Set the `site_url` option in `/config/cms/config.json`
   to the domain you choose in the previous step. Check the section below for more info on the config files and check
   the NetlifyCMS docs for the available options.
7. Visit your local domain and verify that you can see the NetliPress splash screen.
8. Run the NetlifyCMS proxy server with `npm run proxy`
9. Access the CMS locally at `/admin`. If the host is configured correctly and the proxy server is running, you should
   be able to access the CMS.
10. Create a new page in the CMS with the path `/` and a title. This will be your homepage. Verify that you can publish
    it. Then refresh the CMS page, and you should be able to click `View Live` to visit the page. You should see the
    title you entered. Don't worry if the layout looks broken. This is because NetliPress doesn't ship with a styled
    theme. If the URL is wrong, check if you configured your `site_url` correctly in step 6.
11. (optionally) Configure the browserSync proxy option in `webpack.mix.js`
12. Use `npm run watch` during development to compile assets and update via BrowserSync

## Deploy to Netlify

This is to be documented better. But in short the steps are.

1. Initialize a Git repository for this project and push it to Gitlab or Github.
2. Set up a new site on Netlify and connect it with that same repository.
3. Netlify should run `php netlipress-build` any time NetlifyCMS commits new changes to the content. Note; the
   netlify.toml file should be picked up so the build commands should be automatically discovered.
4. The Netlify build should automatically compile your assets with Laravel Mix any time you commit something containing
   js or scss files. NetlifyCMS commits will trigger static site generation but they skip asset compilation because
   their commits only include json or images. Resulting in quicker builds and less build minutes.

This means that any time you make a code change and push it, the commit hook makes sure you push the latest compiled
production assets. And Netlify triggers a build of only the static site assets. This means you commit compiled assets
but that is on purpose. This saves on build minutes because npm doesn't run on Netlify this way.

## Config files

`config.json` is the base config. All other files get merged with this file to make the final config for NetlifyCMS

`collections.json` holds all your content collections. Pages and posts are filled by default.

`fields.json` allows you to specify field groups that get shared across collections. An example is provided by default

`menu.json` holds a single collection for menu records. Check `/content/menu/primary.json` for an example.

`settings.json` holds a single collection for groups of site settings. Check `/content/settings/socials.json` for an
example.

## Development functions

`npm run watch` - Build assets for development

`npm run prod` - Build assets for production

`php netlipress-build` - Build static site for Netlify

`npm rum proxy` - Start a proxy to use NetlifyCMS on local the repository

## To Do

- [ ] Document Netlify Deployment steps
- [ ] Document Git hook to build production so build minutes on netlify are minimal
- [ ] Document the shared field groups
- [ ] Document the separate JSON files in config
