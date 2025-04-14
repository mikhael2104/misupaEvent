function scrollSlider(direction) {
    const slider = document.getElementById('eventSlider');
    const cardWidth = slider.querySelector('.event-card').offsetWidth + 16; // 16 = gap
    slider.scrollLeft += direction * cardWidth * 1; // 1 card per klik
}