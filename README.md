An Omeka plugin that embeds an OHMS Object via URL paths in the OHMS Object field.

Usage Note:

Before successfully using this plugin, a new Item Type Metadata field called 'OHMS Object' must be created within your metadata field configuration.  For a particular record, the full URL path to the OHMS object should be placed into this field.

This plugin has configured alternate display for the admin vs public theme.  In the public theme, an iframe displays in order to embedd the OHMS Viewer (https://github.com/uklibraries/ohms-viewer) within the item view.  In the admin theme, a simple hyperlink to the OHMS Viewer Object is displayed.
