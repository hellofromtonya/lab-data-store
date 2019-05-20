# The Basics of a Data Store

This document defines the basic attributes and functionality of the data store.

## External Functionality

This is the interface of how to interact with the data store:

- Put items into the store: `set`, `put`, `store`, or `add`
- Read items out of the store: `get`
- Check if an item exists in the store: `exists` or `has`. 
	- Give it a store key to check if it exists.
	- Returns `true` if the key exists; else, `false`.

## Internal Functionality and Attributes

- Has a container - holds the items that have been stored.
- Retain the items in the container (so the items can be accessed later).
- Data agnostic, any kind of data can be stored.
- Identify each item in the container/store.

### Item Identifier

Attributes:
- Unique (cannot be repeated)
- Bond to one item
- Readable and understandable
- Items are discoverable - query or filter by the naming convention
- Will be held in memory.

Naming convention for our identifiers:

`[item type].[subtytpe].[name_or_slug]`

- item type: examples: config, object (post, query), user info
- subtype:
	- config: post_type, tax, shortcode, template, query
- name_or_slug
	- examples: name of the CPT or Tax, shortcode name, etc.

Examples:
- Theme Settings: `'config.theme.settings'`
- Lab CPT: `'config.post_type.lab'`
- Docx CPT: `'config.post_type.docx'`
- Glossary CPT: `'config.post_type.glossary'`
- Help CPT: `'config.post_type.help'`
- Catalog Tax: `'config.tax.catalog'`
- Skills Tax: `'config.tax.skills'`

### Container of Items

The container will have the following attributes:
- It's a container - holds the items that have been stored.
- Data agnostic, any kind of data can be stored.
- Identify (key) each item in the container/store.
- Held in memory.
- Retain the items in the container (so the items can be accessed later).

It will use the [PHP Array Data Type](https://knowthecode.io/docx/php/array).

The container could be:
- ~~JSON file~~ - excluded due to performance
- ~~database~~~ - excluded due to performance
- ~~in-memory cache - Redis~~ - excluded due to unknown server setup.
- in-memory using a PHP array data type

Ways to retain the items in the container:
- Procedural: `static $container = [];`
- Static Class:  property: `static $container = [];` (visibility `private`)
- OOP: property: `private $container = [];`
