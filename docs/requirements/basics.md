# The Basics of a Data Store

This document defines the basic attributes and functionality of the data store.

## External Functionality

This is the interface of how to interact with the data store:

- Put items into the store: `set`, `put`, `store`, or `add`
- Read items out of the store: `get`

## Internal Functionality and Attributes

- Has a container - holds the items that have been stored.
- Retain the items in the container (so the items can be accessed later).
- Data agnostic, any kind of data can be stored.
- Identify each item in the container/store.
