if (document.getElementById("pagination-table") && typeof simpleDatatables.DataTable !== 'undefined') {
    const dataTable = new simpleDatatables.DataTable("#pagination-table", {
        paging: true,
        perPage: 15,
        perPageSelect: [5, 10, 15, 20, 25],
        sortable: false
    });
}


document.addEventListener('DOMContentLoaded', function () {

    const requirementsModalBody = document.getElementById("requirementsModalBody");
    const responsibilitiesModalBody = document.getElementById("responsibilitiesModalBody");

    // requirementsModalBody.innerHTML = "ok";

    // console.log(requirementsModalBody);

    const requirementsMDE = new EasyMDE({
        element: document.getElementById("requirements"),
        toolbar: [
            "bold",
            "italic",
            "strikethrough",
            "heading",
            "|",
            "quote",
            "unordered-list",
            "ordered-list",
            "|",
            "link",
            "image",
            "table",
            "horizontal-rule",
            "|",
            "fullscreen",
            "|",
            "guide"
        ]
    });

    const responsibilitiesMDE = new EasyMDE({
        element: document.getElementById("responsibilities"),
        toolbar: [
            "bold",
            "italic",
            "strikethrough",
            "heading",
            "|",
            "quote",
            "unordered-list",
            "ordered-list",
            "|",
            "link",
            "image",
            "table",
            "horizontal-rule",
            "|",
            "fullscreen",
            "|",
            "guide"
        ]
    });

        requirementsMDE.codemirror.on("change", function () {

            let md = requirementsMDE.value();
            let html = marked.parse(md);

            requirementsModalBody.innerHTML = html;

            livewire.emit('setRequirements', html);
        });

    responsibilitiesMDE.codemirror.on("change", function () {
        let val = responsibilitiesMDE.value();
        let md = marked.parse(val);

        // @this.set("responsibilities", md);

        responsibilitiesModalBody.innerHTML = md;
    });

    const applicationDeadline = document.getElementById('applicationDeadline');

    applicationDeadline.addEventListener("changeDate", function (e) {
        // @this.set("applicationDeadline", applicationDeadline.value);
    });

    const published = document.getElementById('published');

    published.addEventListener("changeDate", function (e) {
        // @this.set("published", published.value);
    });
});


