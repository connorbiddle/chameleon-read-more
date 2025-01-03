window.addEventListener("DOMContentLoaded", () => {
    // DOM selection
    const module  = document.querySelector(".fl-node-<?php echo $id; ?>");
    const content = module.querySelector(".fl-rich-text-expandable-content");
    const button  = module.querySelector(".fl-rich-text-expandable-button");
    
    // Get original height of text in px
    const originalHeight = content.getBoundingClientRect().height;
    const collapsedHeight = originalHeight * (<?php echo $settings->collapsed_height; ?> / 100);

    content.style.height = `${collapsedHeight}px`;

    // Get text for "read more"/"read less" button
    const readMoreText = "<?php echo $settings->read_more_text; ?>";
    const readLessText = "<?php echo $settings->read_less_text; ?>";

    // State
    let expanded = false;

    // Button function
    const onClick = (e) => {
        e.preventDefault();

        if (expanded) {
            content.style.height = `${collapsedHeight}px`;
            button.textContent = readMoreText;
        } else {
            content.style.height = `${originalHeight}px`;
            button.textContent = readLessText;
        }

        expanded = !expanded;
    }

    button.addEventListener("click", onClick);
});
