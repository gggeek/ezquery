An extension dedicated to simplifying the fetch( content, list ) chore
======================================================================

Planning stage, discussion happening so far at http://share.ez.no/forums/discussions/little-nemo-in-slumbercode-part-1-can-jquery-meet-the-ez-template-languag

Usecases
========

. q('#2').name => node name
. q('#2').children|count => number of children
. q('.article').0 => first node in the set
. q('.article :eq(0)') => first node in the set, but smarter than the above


Formal syntax for the selector
==============================

DONE:

TO BE DONE:

#n select node n
[name="value"] select where attribute 'name' has value 'value'
[name|="value"], [name*="value"], [name$="value"], [name!="value"]
.class
' > ' direct child of
:empty node with no children
:eq(), :lt(), :gt() used for pagination (when fetching a set)
['name'] has an attribute named "name"
:hidden / :visible
[attributeFilter1][attributeFilter2][attributeFilterN] (AND them together)
" , , " multiple selector (implemented via many queries)
:parent
