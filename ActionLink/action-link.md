ActionLink
==============
2017-05-03



A link which clicks are intercepted by a javascript handler.


This model is open to new features.
Renderer implementors should document new features that they add.

 
 
- ?confirm: bool=false, whether or not to confirm before executing the action
- ?confirmText: string=null, the confirm text. If null, will default to 
                a default text of: "Are you sure you want to execute this action?"
- ?label: string="", the label of the action link
- ?id: the identifier of the action link. It is used only to be passed as the uri {id} tag.
- ?uri: string="/actionlink-handler?id={id}", The {id} tag will be replaced with the value of the id property, or 0 if the id property is not set
- ?type: string=modal, the type amongst:
        - flat: simply redirects to the given uri, as would a regular html link do
        - modal: the uri will be called via ajax, and a modal
                    will be used to hold the server's response.
                    Communication will use the [Gscp protocol](https://github.com/lingtalfi/gscp)
        - refreshOnSuccess: like modal, but displays the modal only in case of failure,
                    and otherwise (in case of success), it refreshes the page or the relevant part of it.
        - quietOnSuccess: like modal, but displays the modal only in case of failure,
                    and otherwise (in case of success), does nothing
                    
                    
               



