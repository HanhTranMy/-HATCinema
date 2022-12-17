<?php
$announce = "";
require_once('./utils.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <title>Document</title>
    <style>
 

        main {
            position: relative;
            padding: 1rem 1rem 3rem;
            min-height: calc(100vh - 4rem);
        }

        h1 {
            margin-top: 0;
        }

        .hidden {
            display: none;
        }

        .pagination-container {
            width: calc(100% - 2rem);
            display: flex;
            align-items: center;
            position: absolute;
            bottom: 0;
            padding: 1rem 0;
            justify-content: center;
        }

        .pagination-number,
        .pagination-button {
            font-size: 1.1rem;
            background-color: transparent;
            border: none;
            margin: 0.25rem 0.25rem;
            cursor: pointer;
            height: 2.5rem;
            width: 2.5rem;
            border-radius: .2rem;
        }

        .pagination-number:hover,
        .pagination-button:not(.disabled):hover {
            background: #fff;
        }

        .pagination-number.active {
            color: #fff;
            background: #0085b6;
        }

        footer {
            padding: 1em;
            text-align: center;
            background-color: #FFDFB9;
        }

        footer a {
            color: inherit;
            text-decoration: none;
        }

        footer .heart {
            color: #DC143C;
        }
    </style>
</head>

<body>

    <h1>Pagination with Vanilla JavaScript</h1>
    <div id="paginated-list" data-current-page="1" aria-live="polite">
        <?php
        $data = getAllData('SElECT * FROM bapnuoc', 1);

        foreach ($data as $value) {
        ?>
            <div class="test"><?php echo $value['maBapNuoc'] ?></div>
        <?php }; ?>
    </div>

    <nav class="pagination-container">
        <button class="pagination-button" id="prev-button" aria-label="Previous page" title="Previous page">
            &lt;
        </button>

        <div id="pagination-numbers">

        </div>

        <button class="pagination-button" id="next-button" aria-label="Next page" title="Next page">
            &gt;
        </button>
    </nav>


</body>
<script type="text/javascript">
    const paginationNumbers = document.getElementById("pagination-numbers");
    const paginatedList = document.getElementById("paginated-list");
    const listItems = paginatedList.querySelectorAll(".test");
    const nextButton = document.getElementById("next-button");
    const prevButton = document.getElementById("prev-button");

    const paginationLimit = 5;
    const pageCount = Math.ceil(listItems.length / paginationLimit);
    let currentPage = 1;

    const disableButton = (button) => {
        button.classList.add("disabled");
        button.setAttribute("disabled", true);
    };

    const enableButton = (button) => {
        button.classList.remove("disabled");
        button.removeAttribute("disabled");
    };

    const handlePageButtonsStatus = () => {
        if (currentPage === 1) {
            disableButton(prevButton);
        } else {
            enableButton(prevButton);
        }

        if (pageCount === currentPage) {
            disableButton(nextButton);
        } else {
            enableButton(nextButton);
        }
    };

    const handleActivePageNumber = () => {
        document.querySelectorAll(".pagination-number").forEach((button) => {
            button.classList.remove("active");
            const pageIndex = Number(button.getAttribute("page-index"));
            if (pageIndex == currentPage) {
                button.classList.add("active");
            }
        });
    };

    const appendPageNumber = (index) => {
        const pageNumber = document.createElement("button");
        pageNumber.className = "pagination-number";
        pageNumber.innerHTML = index;
        pageNumber.setAttribute("page-index", index);
        pageNumber.setAttribute("aria-label", "Page " + index);

        paginationNumbers.appendChild(pageNumber);
    };

    const getPaginationNumbers = () => {
        for (let i = 1; i <= pageCount; i++) {
            appendPageNumber(i);
        }
    };

    const setCurrentPage = (pageNum) => {
        currentPage = pageNum;

        handleActivePageNumber();
        handlePageButtonsStatus();

        const prevRange = (pageNum - 1) * paginationLimit;
        const currRange = pageNum * paginationLimit;

        listItems.forEach((item, index) => {
            item.classList.add("hidden");
            if (index >= prevRange && index < currRange) {
                item.classList.remove("hidden");
            }
        });
    };

    window.addEventListener("load", () => {
        getPaginationNumbers();
        setCurrentPage(1);

        prevButton.addEventListener("click", () => {
            setCurrentPage(currentPage - 1);
        });

        nextButton.addEventListener("click", () => {
            setCurrentPage(currentPage + 1);
        });

        document.querySelectorAll(".pagination-number").forEach((button) => {
            const pageIndex = Number(button.getAttribute("page-index"));

            if (pageIndex) {
                button.addEventListener("click", () => {
                    setCurrentPage(pageIndex);
                });
            }
        });
    });
</script>

</html>