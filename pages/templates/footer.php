    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

    <script>

    // Get both button elements by their IDs
    const buttonRegister = document.getElementById('button-register');
    const buttonList = document.getElementById('button-list');

    // Function to handle the button click and set the "active" class
    // function setActiveButton(activeButton, inactiveButton) {
    //     activeButton.classList.add('active');
    //     inactiveButton.classList.remove('active');
    // }

    // // Add click event listeners to the buttons
    // buttonRegister.addEventListener('click', function(event) {
    //     event.preventDefault();
    //     setActiveButton(buttonRegister, buttonList);
    // });

    // buttonList.addEventListener('click', function(event) {
    //     event.preventDefault();
    //     setActiveButton(buttonList, buttonRegister);
    // });
    
    function setAge(){
        // count the age based on the date of birth
        // get the birth date
        var birth_date = document.getElementById("birth_date").value;
        console.log(birth_date);
        // get the year only
        var birth_year = birth_date.substring(0,4);
        // get the current year
        var currentYear = new Date().getFullYear();
        console.log(currentYear);
        
        // calculate the age
        var age = currentYear - birth_year;
        console.log(age);

        if(age > 0){
            document.getElementById("age").value = age;
        } else {
            alert ("Harap masukkan tahun lahir yang sesuai");
            // reset value
            document.getElementById("birth_date").value = null;
            document.getElementById("age").value = 0;
            return false;
        }
        

    }

    function confirmDelete() {
        if (confirm("Apakah anda yakin ingin menghapus data?")) {
            return true;
        } else {
            event.preventDefault();
            return false;
        }
    }

    // Initialize DataTables
    $(document).ready(function () {
      $('#dataSiswa').DataTable(
        {
            dom: 'Bfrtip',
            buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
        }
      );
    });
    </script>
</body>
</html>