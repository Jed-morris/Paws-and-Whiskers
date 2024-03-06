<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="./js/homepage.js"></script>
    <script>
        function openItems(x) {
            var i, cardContainer, navLinks;
            cardContainer = document.getElementsByClassName("card-container");
            for (i = 0; i < cardContainer.length; i++) {
                cardContainer[i].style.display = "none";
            }
            document.getElementById(x).style.display = "grid";
        }
        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
		
    </script>
</body>
</html>