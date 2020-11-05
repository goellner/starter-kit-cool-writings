# Shallow Augmentation bug

The bug can be seen here: http://cool.local/api/collections/pages/entries/afec8b87-da30-44e6-be87-809ad8b3e56e

In the first level the API only returns the selected fields from shallowAugmentedArrayKeys, one level deeper it returns the full entry.

## Setup local

Add a cool.local host and set the webroot to the `public` directory