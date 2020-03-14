/*
            $("#otherShow").hide();
            $(function() {    // Makes sure the code contained doesn't run until
                //     all the DOM elements have loaded

                $('#meet').change(function(){
                    if ($("#meet").val() == "Other") {
                        $('#otherShow').show();
                    }
                });

            });


            $("#answer").hide();
            $('.form-check-input').click(function() {
                if( $(this).is(':checked')) {
                    $("#answer").show();
                } else {
                    $("#answer").hide();
                }
            });




            document.getElementById("guestForm").onsubmit = validate;

            function validate(){
                let valid = true;
                let errors = document.getElementsByClassName("err");
                for(let i=0; i<errors.length; i++){
                    errors[i].style.visibility = "hidden";
                }
                let fname = document.getElementById("firstName").value;
                if(fname==""){
                    let errFirst = document.getElementById("errF");
                    errFirst.style.visibility = "visible";
                    valid = false;
                }
                let lname = document.getElementById("lastName").value;
                if(fname==""){
                    let errFirst = document.getElementById("errL");
                    errFirst.style.visibility = "visible";
                    valid = false;
                }
                let email= document.getElementById("email").value;
                let html=document.getElementById("html");
                let text=document.getElementById("text");
                if(email!=""){
                    if(!email.includes("@")&& !email.includes(".")){
                        let errMail= document.getElementById("errMail2");
                        errMail.style.visibility = "visible";
                        valid=false;
                    }
                }

                let terms=document.getElementById("terms"); //check box
                if(terms.checked){



                    if(email==""){
                        let errMail= document.getElementById("errMail");
                        errMail.style.visibility = "visible";
                        valid=false;
                    }else if(!email.includes("@")&& !email.includes(".")){
                        let errMail= document.getElementById("errMail2");
                        errMail.style.visibility = "visible";
                        valid=false;
                    }
                    if(html.checked==false && text.checked==false){
                        let errFormat=document.getElementById("errFormat");
                        errFormat.style.visibility = "visible";
                        valid=false;
                    }

                }

                let linkedIn=document.getElementById("link").value;
                if(linkedIn!=""){
                    if(!linkedIn.endsWith(".com") || !linkedIn.startsWith("http")){
                        let errLink=document.getElementById("errLink");
                        errLink.style.visibility = "visible";
                        valid=false;
                    }
                }


                let meet=document.getElementById("meet").value;
                if(meet=="none"){
                    let errP=document.getElementById("errSelect");
                    errP.style.visibility = "visible";
                    valid=false;
                }
                else if(meet=="Other"){
                    let other=document.getElementById("other").value;
                    if(other==""){
                        let errOther=document.getElementById("errOther");
                        errOther.style.visibility="visible";
                        valid=false;
                    }
                }








                return valid;
            }
    */
