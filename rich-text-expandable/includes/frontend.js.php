window.addEventListener("DOMContentLoaded", () => {
    console.log("test");
    // DOM selection
    const module = document.querySelector(".fl-node-<?php echo $id; ?>");
    const textContainer = module.querySelector(".fl-rich-text-expandable");
    const expandBtn = module.querySelector(".fl-rich-text-expandable-expand");

    // State
    let expanded = false;

    // Toggle function
    const toggleText = (e) => {
        e.preventDefault();

        textContainer.innerHTML = expanded
            ? `<?php echo $settings->text; ?>`
            : `<?php echo $settings->text_expanded; ?>`;

        textContainer.appendChild(expandBtn);
        
        expanded = !expanded;
    }

    expandBtn.addEventListener("click", toggleText);
});
