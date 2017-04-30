DataTable model
===================
2017-04-29



(view info)
- headers: array of columnId => label
                This array is also determining the order in which columns are displayed.
                It must contain all columns, including hidden ones.
- hidden: array of hidden columns.
                Hidden means hidden from the view, but the data shall be still accessible if needed.
- rows: array of row, each row containing the key => value data.
                The value is a string, or an array.
                If it's a string, it represents the data to display.
                We use the array form when we want to create something special like links.
                
                So if the value array, it is the following array:
                
                - type: string indicating the type of special thing we want to display.
                            The available types so far are:
                            - link
                            - links
                
                The rest of the array entries depend on the type.
                Those remaining entries are described below in this document.
                
- ric: array of row identifying columns (generally just contain the id column for dataTables which render data from a database)
                
                
                
                
                

                
(customization info)
- page: int=1, the number of the current page                
- nbTotalItems: int=1, total number of items                
- nipp: int=20, the number of items per page
- checkboxes: bool=true, whether or not to add the checkboxes (which allows for bulk actions)
- isSearchable: bool=true, whether or not to use a search system
- unsearchable: array of columnId which are not searchable
- searchValues: array of columnId to current search text
- isSortable: bool=true, whether or not to use the "order by" system
- unsortable: array of columnId which are not sortable 
- sortValues: array of columnId to sort direction (asc or desc), which indicates the 
                type of sort currently being applied to that column.__
                
- showCountInfo: bool=true, whether or not to show the count info (Showing 1 to 10 of 57 entries)
- showNipp: bool=true, whether or not to show the nbItemPerPage selector
- nippItems: array of possible nipp values, default=\[5, 10, 20, 50, 100, all]
                The special value all means all.
- showQuickPage: bool=true, whether or not to display a quick page navigation widget
- showPagination: bool=true, whether or not to display the pagination widget
- bulkActions: array of identifier => bulkActions, each entry containing the following:
    - confirm: bool=false, whether or not to confirm before executing the action
    - confirmText: string=null, the confirm text. If null, will default to 
                    a default text of: "Are you sure you want to execute this action?"
    - label: string, the label of the bulk action
    - uri: string, the uriNotation (see below) 
    - type: string, the type amongst:
            - post: the data will be posted to the given uri as post data, this will refresh the page
            - modal: the data will be posted to the given uri as post data, but via ajax, and a modal
                        will be used to hold the server's response.
                        Json must be used as the datatype for this type of exchange.
                        The returned response must be a standardJsonResponse (see below).
            - refreshOnSuccess: like modal, but displays the modal only in case of failure,
                        and otherwise (in case of success), it refreshes the datatable (and widgets).
            
- textNoResult: string, the text to display when the number of rows is zero.
                Default: No results found
- textSearch: string, the text to display in the search button
            
            
            
            

            
uriNotation         
------------
It's a string, but the {ric} tag is replaced with the ric values separated with the ricSeparator.
  
ricSeparator
---------------
The ricSeparator is used to separate ric values.
Since ric values can be anything, the ricSeparator should be hard to guess.
The default is: +--ric_separator--+


standardJsonResponse
-----------------
An array containing two keys:
- type: string, the response type: error|success
- message: string, the accompanying message 



Rows special features
=========================

link
---------
This will create a link.
The following properties describe a link:


- type: string, defines the type of link displayed:
    - link: a regular link, which points to any page, a page refresh is involved
    - modal: an ajax link, which return is displayed in a modal.
            Json must be used as the datatype for this type of exchange.
            The returned response must be a standardJsonResponse (see above).
    - refreshOnSuccess: like modal, but displays the modal only in case of failure,
                        and otherwise (in case of success), it refreshes the datatable (and widgets).
- uri: string, the uriNotation for the link
- confirm: bool=false, whether or not to confirm before executing the action
- confirmText: string=null, the confirm text. If null, will default to 
                a default text of: "Are you sure you want to execute this action?"
- icon: string=null, if not null, provides an identifier representing the type of icon desired.
                


links
---------
An array of link as described above.
Shall be displayed as a grouped buttons widgets or something alike.





Renderer constraints
========================
The dataTable widget is an alive widget, which gets updated as the user searches through it,
changes the sort order, deletes a row, etc...
This involves a server script handling the update of the model server side.

So there must be a communication protocol between the dataTable and the server.
Although this is not strictly a model's problem, we suggest the following implementation:





- search: string|array,
            depending on whether the renderer offers a search by column or a general search widget.
            
            If this is a string, then it's a global search (assuming searching all columns). 
            If this is an array, it's an array of columnId => searchText.
             
            The array is the recommended form as it's more flexible.
- sort: array of columnId => sortDirection  
                sortDirection is one of asc|desc.
- nipp: int|all, number of items per page. 
                    The special keyword all, if allowed server side, yields all the results.
- page: int, the number of the page we wish to display 
                      
                
            



