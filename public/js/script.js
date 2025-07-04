if (document.getElementById("pagination-table") && typeof simpleDatatables.DataTable !== 'undefined') {
    const dataTable = new simpleDatatables.DataTable("#pagination-table", {
        paging: true,
        perPage: 15,
        perPageSelect: [5, 10, 15, 20, 25],
        sortable: false
    });
}