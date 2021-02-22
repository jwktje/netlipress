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
4. Configure the `/admin/config.yml` according to the Netlify CMS docs
5. Create a new host in MAMP (or similar) that points to the root of this project
6. Use the Development functions below during development

## Development functions
`npm run watch` 

Build assets for development

`npm run prod`

Build assets for production

## Casts

The file `/admin/casts.json` allows to you define which fields need additional parsing. Only Markdown is currently supported.
You can define the path to a CMS field and it's type to trigger casting. 

The fields are matched on the collection name or (if they occur in dynamic list sections) fall under the group 'sections'.

For example:
```
{
  "sections" : {
    "section-name-here" : {
      "paragraph" : "markdown"
    }
  },
  "pages" : {
    "body" : "markdown"
  }
}
```
