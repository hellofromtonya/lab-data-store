# The Basics of the API

This document defines the basic functionality of the data store's API.  

The API serves as a public, globally accessibility interface with the Data Store.  Using the API, the developer does not need to know the Data Store implementation or how to directly interact with the Data Store.

## Public-Facing Functionality

This is the interface of how to interact with the data store's API.  It provides procedural functions for each of the Data Store's public methods.  These include:

- Add item to the store.
- Get item from the store.
- Check if item exists in the store.
- Remove item from the store.
- Replace item in the store.
- Merge item with the item in the store.
- Empty the store.

### Naming Convention:

[verb]_[prepositions]_data_store()

- `add_to_data_store()` or `add_item_to_data_store()`
- `get_from_data_store()` or `get_item_from_data_store()`
- `has_in_data_store()` or `exists_in_data_store()`
- `remove_from_data_store()` or `remove_item_from_data_store()`
- `replace_in_data_store()` or `replace_item_in_data_store()`
- `merge_in_data_store()` or `merge_with_item_in_data_store()`
- `empty_the_data_store()` or `empty_data_store()`

## Attributes

- Globally accessible - meaning that any plugin or theme has access and can interact with the Data Store.
- Control how to interact with the items in the Data Store or the store itself.
- The Data Store and its implementation are handled within the API, but abstracted (hidden) from the developer.
