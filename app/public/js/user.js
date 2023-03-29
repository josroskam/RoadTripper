
        // Get DOM Elements
        const modal = document.querySelector('#my-modal');
        const modalBtn = document.querySelector('#modal-btn');
        const closeBtn = document.querySelector('.close');

        // Events
        modalBtn.addEventListener('click', openModal);
        closeBtn.addEventListener('click', closeModal);
        window.addEventListener('click', outsideClick);

        // Open
        function openModal() {
            modal.style.display = 'block';
        }

        // Close
        function closeModal() {
            modal.style.display = 'none';
            var form = document.getElementById('myForm');
            form.reload();
        }

        // Close If Outside Click
        function outsideClick(e) {
            if (e.target == modal) {
                modal.style.display = 'none';
            }
        }
        var readonly = true;

        function switchReadonly() {
            // $('#modal-btn').on('click', (e) => {
            readonly = !readonly
            $('input').attr('readonly', readonly);
            // });
            notReadonlyInput();
        }

        function notReadonlyInput() {
            const input = document.getElementById('notreadonly');
            readonly = true;
            $(input).attr('readonly', readonly);
        }

        function showSaveButton() {
            const button = document.getElementById('modal-btn2');
            button.style.display = 'block';
        }

        function setPasswordValueToNull() {
            var v = document.getElementById('pwd').value = '';
        }

        var alertBox = document.getElementById('alertBox');
        var alertParagraph = document.getElementById('alertParagraph');

        function userRegisteredSuccessfully(succesMessage) {
            alertBox.className = "alert alert-success";
            alertBox.style = "display:block"
            alertParagraph.innerHTML = succesMessage;
        }

        function userRegisteredFailed(errorMessage) {
            alertBox.className = "alert alert-danger";
            alertBox.style = "display:block"
            alertParagraph.innerHTML = errorMessage;
        }

        // $(document).ready(function(){
        function updateFormFields() {
            $.ajax({
                url: "/api/user",
                type: "GET",
                success: function (userData) {
                    Object.keys(userData).forEach(function (key) {
                        console.log(userData.firstname);
                    });
                },
                error: function (xhr, status, error) {
                    console.log("Error: " + error);
                }
            });
        }

        const deleteButton = document.querySelector('#deleteAccount');
        deleteButton.addEventListener('click', deleteAccount);

        function deleteAccount() {
        // send a DELETE request to the server to delete the account
        fetch('/api/user', {
            method: 'DELETE'
        })
        .then(response => {
            if (response.ok) {
            // if the account was successfully deleted, redirect the user to the homepage
            window.location.replace('/logout');
            } else {
            alert("An error occurred while deleting your account. Please try again later.");
            }
        })
        .catch(error => {
            console.error("Error deleting account:", error);
            alert("An error occurred while deleting your account. Please try again later.");
        });
        }