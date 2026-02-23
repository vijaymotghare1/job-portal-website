document.getElementById("searchInput").addEventListener("keyup", function() {
    let filter = this.value.toLowerCase();
    let jobs = document.querySelectorAll(".job-card");
    jobs.forEach(job => {
        let title = job.getAttribute("data-title").toLowerCase();
        job.style.display = title.includes(filter) ? "block" : "none";
    });
});

document.getElementById("sortSelect").addEventListener("change", function() {
    let container = document.getElementById("jobContainer");
    let jobs = Array.from(container.children);
    let value = this.value;

    jobs.sort((a,b)=>{
        return a.getAttribute("data-"+value).localeCompare(b.getAttribute("data-"+value));
    });

    jobs.forEach(job => container.appendChild(job));
});