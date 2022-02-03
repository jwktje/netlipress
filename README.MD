# NetliPress

A framework to write a website managed by Netlify CMS and themed like a Wordpress Theme.
Code can be easily migrated to a full fledged Wordpress Theme.

## How does it work?

This framework uses Collections from Netlify CMS that are formatted as JSON.
The router checks if an entry in a collection exists, if so, it loads the data and renders the page.

This data is made available via template tags that mimic a Wordpress and ACF workflow. These tags are described further down.
The theme uses Laravel Mix to build the front-end assets.

## Get started

1. Run `composer create-project netlipress/netlipress MyProjectName`
2. Run `cd MyProjectName`
3. Run `npm install`
4. Configure the `/config/cms/config.json` according to the Netlify CMS docs
5. Create a new host in MAMP (or similar) that points to the web directory of this project
6. Configure the browserSync proxy option in webpack.mix.js
7. Use the Development functions below during development

## Development functions
`npm run watch` 

Build assets for development

`npm run prod`

Build assets for production

`php netlipress-build`

Build static site for Netlify

## To Do

- [ ] Document Netlify Deployment steps
- [ ] Document the shared field groups
- [ ] Document the separate JSON files in config
