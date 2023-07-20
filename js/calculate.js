const initialAmount = parseInt(document.querySelector('#initial-amount').value);
	const GSTRate = parseInt(document.querySelector('#gst-rate').value);
	const deliviery = parseInt(document.querySelector('#deliviery-amtt').value);


	// Net Amount
	const netAmount = document.querySelector('#initial-amount').value = initialAmount;

	// GST AMount
	const gstAmount = document.querySelector('#gst-rate').value =  GSTRate;

	// delivery charge
	const delivieryamt = document.querySelector('#deliviery-amtt').value =  deliviery;

        //setting default attribute to disabled of minus button
        document.querySelector(".minus-btn").setAttribute("disabled", "disabled");

        //taking value to increment decrement input value
        var valueCount

        //taking price value in variable
        var price = document.getElementById("price").innerText;

        //price calculation function
        function priceTotal() {
            
            var total = parseInt(delivieryamt) + parseInt(gstAmount) + parseInt(netAmount) * valueCount ;
            document.getElementById("price").innerText = total
            document.getElementById("pricee").value = total 
            document.getElementById("priceee").value = total 


              
            
        }

        //plus button
        document.querySelector(".plus-btn").addEventListener("click", function() {
            //getting value of input
            valueCount = document.getElementById("quantity").value;

            //input value increment by 1
            valueCount++;

            //setting increment input value
            document.getElementById("quantity").value = valueCount;

            if (valueCount > 1) {
                document.querySelector(".minus-btn").removeAttribute("disabled");
                document.querySelector(".minus-btn").classList.remove("disabled")
            }

            //calling price function
            priceTotal()
        })

        //plus button
        document.querySelector(".minus-btn").addEventListener("click", function() {
            //getting value of input
            valueCount = document.getElementById("quantity").value;

            //input value increment by 1
            valueCount--;

            //setting increment input value
            document.getElementById("quantity").value = valueCount

            if (valueCount == 1) {
                document.querySelector(".minus-btn").setAttribute("disabled", "disabled")
            }

            //calling price function
            priceTotal()
        })
