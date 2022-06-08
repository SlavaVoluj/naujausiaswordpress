
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
    </script>

<!-- Modal -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var btn = document.getElementById("myBtn");
    
        btn.addEventListener("click", function() {
            var myModal = new bootstrap.Modal(document.getElementById("myModal"));
            myModal.show();
        });
    });
    </script>



<?php wp_footer(); ?>
</body>

</html>