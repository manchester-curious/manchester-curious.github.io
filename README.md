[![Build Status](https://travis-ci.org/manchester-curious/staging.svg?branch=master)](https://travis-ci.org/manchester-curious/staging)

# Manchester Curious

Built with [Foundation 6](http://foundation.zurb.com/sites/docs/). 

## Local development

Use [Jekyll](https://jekyllrb.com/) to serve the files locally by running `jekyll serve`. It will generate html in `/_site` and continue to scan for changes to files. Jekyll is configured using `_config.yml` but changes to that are not detected until you relaunch Jekyll.

## Installing Jekyll

Using OS X, run the following from this directory. I’ve not tested these commands because my environment is already set up for Jekyll, so let me know if you have any errors and I’ll try to resolve. This set up should have the advantage of setting up an isolated development environment which won’t break should you update Ruby / gems elsewhere, and will install the versions of everything that GitHub pages uses to make sure the site behaves locally as it will when deployed. You can also install Jekyll following the instructions [here](https://jekyllrb.com/docs/installation/) which also links to an unofficial Windows install in case you need that.

```sh
\curl -sSL https://get.rvm.io | bash
rvm install 2.2.3
rvm use 2.2.3
gem install bundler
bundle install
```

## Tasks

- [ ] Test Jekyll instructions
- [x] Introduce Jekyll layouts to reduce duplication in headers
- [ ] Does gulp need to know about html now rather than php?
- [ ] Set up Apache somewhere with URL rewriting to point building / event requests at a single page (I think we can point this at GitHub Pages rather than publish the files over FTP)
- [x] POC building pages to fetch content from web service and update page
- [ ] Update page header (title etc) with data from web service
- [ ] Write JavaScript for building / event pages to fetch content from web service and update page
- [ ] Make sure we have all the data we need in the web services

## Notes

- I've put all the common elements into the `_includes` directory for easy maintenance.

- I haven't optimised the js/css, though I have concatenated the required Foundation js files into js/core.js.

- I'm not convinced that the layout for 'Programme' and 'Buildings & Tours' works on mobile - what do you think?

- We also need to decide what elements to leave out on mobiles.

- I may rework the partners page because the logos get quite small on mobile screens.

