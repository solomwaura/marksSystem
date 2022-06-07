function sortTotal() {
    var table, rows, switching, i, x, y, shouldSwitch;
    // switchCount = 0;

    tableli = document.getElementById('table');
    switching = true;

    // set the sorting direction


    while (switching) {
        switching = false;
        rows = table.rows;

        for (i = 1; 1 < (rows.length - 1); i++) {
            shouldSwitch = false;
            x = rows[i].getElementsByTagName("TD")[0];
            y = rows[i + 1].getElementsByTagName("TD")[0];


            if (Number(x.innerHTML) > Number(y.innerHTML)) {
                shouldSwitch = true;
                break;

            }

        }



        if (shouldSwitch) {
            row[i].parentNode.insertBefore(rows[i + 1], rows[i]);
            switching = true;

        }

    }
}