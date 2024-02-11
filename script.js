// Include header and footer content dynamically (JavaScript required)
const header = document.querySelector("header[include-src]");
const footer = document.querySelector("footer[include-src]");

if (header) {
    const headerContent = fetch(header.getAttribute("include-src")).then((res) =>
    res.text()
    );
    headerContent.then((text) => (header.innerHTML = text));
}

if (footer) {
    const footerContent = fetch(footer.getAttribute);
}
