# The Basics of a Data Store

This document defines the basic attributes and functionality of the data store.

## External Functionality

This is the interface of how to interact with the data store:

- Add an item (by the store key) into the store: `set`, `put`, `store`, or `add`
	- Returns `true` if item is stored; else, returns `false`.
	- Avoids overwriting or replacing an existing item in the store.
	- Checks if the key exists.
		- If `false` (i.e. key does not exist in the store), stores the item and returns `true`.
		- If `true` (i.e. key does exist in the store), does not store the item and returns `false`.
- Get a copy of the item (by store key) out of the store: `get`
	- Return a copy of the item.
	- But the item remains in the store.
- Check if an item exists in the store: `exists` or `has`. 
	- Give it a store key to check if it exists.
	- Returns `true` if the key exists; else, `false`.
- Remove a specific item (by store key) from the store: `remove`.
	- Get the item and return it.
	- Delete the item and its key from the store.
- Replace a specific item (by store key) in the store: `replace`.
	- If the item exists in the store, replaces the item and returns `true`.
	- If the item does not exist in the store, add the item into the store and returns `true`, i.e. `return add(key, item)`
- Merge the given array with the specified item array (by store) key: `merge`, `add_to`
	- Check if specified item exists in the store (`has`):
		- If no, return `false`.
		- If yes, go to the next check.
	- Restricted to arrays only.
		- Check if the given item is an array and the existing item is also an array.
		- If either is not, return `false`. (Bail out)
	- Use native built-in PHP functionality to deeply merge the arrays together.  Then return `true`.
- Empty all items currently stored in the store: `empty`.
	- Caution: deletes all items in the store. Use with care.
	- Handy in tests suite, i.e. clean up after each test.
	- Releases memory for performance and optimization.	

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
