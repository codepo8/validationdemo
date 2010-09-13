/*
  Sharing validation client and server side
  Homepage: http://isithackday.com/hacks/validationdemo
  Copyright (c)2010 Christian Heilmann
  Code licensed under the BSD License:
  http://wait-till-i.com/license.txt
*/
YUI().use('io','node',
  function(Y) {
    Y.on('submit',function(event){
      Y.io('validate.php',
        {
          method:'POST',
          data:'name=' + Y.one('#name').get('value') +
               '&email=' + Y.one('#email').get('value') +
               '&message=' + Y.one('#message').get('value') +
               '&done=done'
        }
      );
      event.preventDefault();
    },'#mainform');
    var success = function(id,o){
      if(o.responseText !== undefined){
        Y.one('#mainform').set('innerHTML',o.responseText);
        var fieldID = Y.one('#mainform span.error').
                        ancestor('label').
                          get('htmlFor'); 
        Y.one('#'+fieldID).focus();
      }
    }
    var failure = function(id,o){
      if(o.responseText !== undefined){
        Y.one('#mainform').submit();
        // failure case
      }
    }
    Y.on('io:success',success);
    Y.on('io:failure',failure);
  }
);
