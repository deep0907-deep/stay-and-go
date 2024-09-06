<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" rel="stylesheet" />

<style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat');


    #search-form {
        width: 17%;
        position: absolute;
        top: 0px;
        left: 481px;
    }

    #search-form input {
        width: 100%;
        font-size: 7px;
        padding: 0px 15px;
        border: 2px solid #ccc;
        border-radius: 2px;
        height: 27px;
        color: black;
    }

    #search-form button {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        background-color: transparent;
        outline: none;
        border: none;
        width: 3rem;
        text-align: center;
        font-size: 1.75rem;
        cursor: pointer;
        color: #333;
    }

    .info {
        margin-top: 0.5rem;
        text-align: center;
        font-size: 0.75rem;
    }

    @media (max-width: 1200px) {
        #search-form {
            width: 50%;
        }
    }

    @media (max-width: 768px) {

        #search-form {
            width: 100%;
        }

        .info {
            font-size: 0.5rem;
        }
    }
</style>






<form action="https://www.google.com/search" method="get" target="_blank" id="search-form">
    <input name="q" type="text" placeholder="Search Here..." id="searchInput" autocomplete="off" autofocus>
    <!-- <button type="button"><i class="fas fa-microphone"></i></button> -->
    <!-- <button type="submit"><i class="fas fa-send"></i></button> -->
</form>




<script>
    const searchForm = document.querySelector("#search-form");
    const searchFormInput = searchForm.querySelector("input"); // <=> document.querySelector("#search-form input");
    const info = document.querySelector(".info");

    // The speech recognition interface lives on the browser’s window object
    const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition; // if none exists -> undefined

    if (SpeechRecognition) {
        console.log("Your Browser supports speech Recognition");

        const recognition = new SpeechRecognition();
        recognition.continuous = true;
        // recognition.lang = "en-US";

        searchForm.insertAdjacentHTML("beforeend", '<button type="button"><i class="fas fa-microphone"></i></button>');
        searchFormInput.style.paddingRight = "50px";

        const micBtn = searchForm.querySelector("button");
        const micIcon = micBtn.firstElementChild;

        micBtn.addEventListener("click", micBtnClick);
        function micBtnClick() {
            if (micIcon.classList.contains("fa-microphone")) { // Start Voice Recognition
                recognition.start(); // First time you have to allow access to mic!
            }
            else {
                recognition.stop();
            }
        }

        recognition.addEventListener("start", startSpeechRecognition); // <=> recognition.onstart = function() {...}
        function startSpeechRecognition() {
            micIcon.classList.remove("fa-microphone");
            micIcon.classList.add("fa-microphone-slash");
            searchFormInput.focus();
            console.log("Voice activated, SPEAK");
        }

        recognition.addEventListener("end", endSpeechRecognition); // <=> recognition.onend = function() {...}
        function endSpeechRecognition() {
            micIcon.classList.remove("fa-microphone-slash");
            micIcon.classList.add("fa-microphone");
            searchFormInput.focus();
            console.log("Speech recognition service disconnected");
        }

        recognition.addEventListener("result", resultOfSpeechRecognition); // <=> recognition.onresult = function(event) {...} - Fires when you stop talking
        function resultOfSpeechRecognition(event) {
            const current = event.resultIndex;
            const transcript = event.results[current][0].transcript;

            if (transcript.toLowerCase().trim() === "stop recording") {
                recognition.stop();
            }
            else if (!searchFormInput.value) {
                searchFormInput.value = transcript;
            }
            else {
                if (transcript.toLowerCase().trim() === "go") {
                    searchForm.submit();
                }
                else if (transcript.toLowerCase().trim() === "reset input") {
                    searchFormInput.value = "";
                }
                else {
                    searchFormInput.value = transcript;
                }
            }
            // searchFormInput.value = transcript;
            // searchFormInput.focus();
            // setTimeout(() => {
            //   searchForm.submit();
            // }, 500);
        }

        info.textContent = 'Voice Commands: "stop recording", "reset input", "go"';

    }
    else {
        console.log("Your Browser does not support speech Recognition");
        info.textContent = "Your Browser does not support Speech Recognition";
    }
</script>

<script>
    document.getElementById('search-form').addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent form submission

        var pageName = document.getElementById('searchInput').value;
        var pageUrl = pageName.toLowerCase() + '.php'; // Construct URL assuming .html extension

        // Redirect to the constructed URL
        window.location.href = pageUrl;
    });
</script>