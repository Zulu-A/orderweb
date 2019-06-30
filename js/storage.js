const ref = firebase.storage().ref('images');
// Get a reference to the database service
var database = firebase.database();


$('#btnupload').on('click',function () {

    var amnt = document.getElementById('fiprice').value;
    var itemName = document.getElementById('finame').value;


    const file = document.querySelector('#fimage').files[0];
    const name = (+new Date()) + '-' + file.name;
    const metadata = {
        contentType: file.type
    };
    const task = ref.child(name).put(file, metadata);
    task
        .then(snapshot => snapshot.ref.getDownloadURL())
        .then((url) => {
            console.log(url);
            console.log('upload successful');
            document.querySelector('#imageID').src = url;
            newOrder(itemName,url,amnt);
        })
        .catch(console.error);
});





function newOrder(name, image, amount) {
        firebase.database().ref('inventoryItems/' + name).set({
            username: name,
            imageURL: image,
            amount: amount,
            timestamp : Date.now()
        }).then(function () {
            console.log('New item added');
            sendItem(name,image,amount,Date.now());
            document.getElementById('uploadStatus').classList.add('alert-success');
            document.getElementById('uploadStatus').innerText = 'New item Added: ' + name;
        });
}


function sendItem(name, image, amount, timestamp) {
    $.ajax({
        type: "post",
        method: "POST",
        data: {itemName:name,itemURL:image,itemAmount:amount,itemTimestamp:timestamp},
        url: "php/items.php",
        success: function (response) {
            console.log('response3: '+ response);
        }
    });
}
