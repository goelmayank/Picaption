// For an introduction to the Blank template, see the following documentation:
// http://go.microsoft.com/fwlink/?LinkId=232509
(function () {
    "use strict";

    var app = WinJS.Application;
    var activation = Windows.ApplicationModel.Activation;

    app.onactivated = function (args) {
        if (args.detail.kind === activation.ActivationKind.launch) {
            if (args.detail.previousExecutionState !== activation.ApplicationExecutionState.terminated) {
                // TODO: This application has been newly launched. Initialize
                // your application here.
            } else {
                // TODO: This application has been reactivated from suspension.
                // Restore application state here.
            }
            args.setPromise(WinJS.UI.processAll());
        }
    };

    app.oncheckpoint = function (args) {
        // TODO: This application is about to be suspended. Save any state
        // that needs to persist across suspensions here. You might use the
        // WinJS.Application.sessionState object, which is automatically
        // saved and restored across suspension. If you need to complete an
        // asynchronous operation before your application is suspended, call
        // args.setPromise().
    };

    app.start();

    var client = new WindowsAzure.MobileServiceClient(
        "https://demo1213.azure-mobile.net/",
        "bFjgHuxwAxtjsAcaKXlFMwybMebMTy21"
    );

    var Item = client.getTable('Item');
    var demand = client.getTable('demand');

    var insertPoem = function (todoItem) {

        // TODO: Delete or comment the following if-else statement;  
        // Mobile Services auto-generates the ID value.                 
       

        //// TODO: Uncomment the following statement. 
        //// This code inserts a new item into the database. After the operation is complete 
        //// and Mobile Services has assigned an id, the item is added to the binding list 
        Item.insert(todoItem).done(function (item) { 
            todoItems.push(item); 
        }); 

        // TODO: Delete or comment out the following statement. 
      
    };

    var insertDemand = function (todoItem) {

        // TODO: Delete or comment the following if-else statement;  
        // Mobile Services auto-generates the ID value.                 


        //// TODO: Uncomment the following statement. 
        //// This code inserts a new item into the database. After the operation is complete 
        //// and Mobile Services has assigned an id, the item is added to the binding list 
        demand.insert(todoItem).done(function (item) {
            todoItems.push(item);
        });

        // TODO: Delete or comment out the following statement. 

    };
    
    $(document).ready(function () {
        $('#button').click(function () {
            insertPoem({
                title: $("#ptitle").val(),
                poem: $("#text").val()
            });
        });

        $('#button1').click(function () {
            insertDemand({
                email: $('#email').val(),
                desc: $('#text1').val()
            })
        })
    });
})();
