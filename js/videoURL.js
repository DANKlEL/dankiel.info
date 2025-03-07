const videoUrls = [
        'https://www.youtube.com/embed/fdtGIXlSBYU',
        'https://www.youtube.com/embed/q-FcxH8VitQ',
        'https://www.youtube.com/embed/1YhCMtuWXYI',
        'https://www.youtube.com/embed/NyeYJHwbMgw',
        'https://www.youtube.com/embed/aEFW1vrqyBg',
        'https://www.youtube.com/embed/yCIsKctKyyk',
        'https://www.youtube.com/embed/kSxN_uQF5EY',
        'https://www.youtube.com/embed/HaEf63Wk1Sc',
        'https://www.youtube.com/embed/q2YLSjHLPeY',
        'https://www.youtube.com/embed/gmlt0TecTZE',
        'https://www.youtube.com/embed/ZRV_zPK18Gg',
        'https://www.youtube.com/embed/9PfPgOhJJaA',
        'https://www.youtube.com/embed/ih8asyTq1oQ',
        'https://www.youtube.com/embed/azfkhwF1jGw',
        'https://www.youtube.com/embed/Sx8w6pJpb3A',
        'https://www.youtube.com/embed/x1RprL97HJs',
        'https://www.youtube.com/embed/ABS1KqO6Dro',
        'https://www.youtube.com/embed/Ex5maczKS3k',
        'https://www.youtube.com/embed/6h5MklJDZCk',
        'https://www.youtube.com/embed/jzdxGmCmB_g',
        'https://www.youtube.com/embed/xUnf5UXAW5g',
        'https://www.youtube.com/embed/90OnAT9ELks'
    ];

    let currentVideoIndex = 0;

    document.querySelector('.next').addEventListener('click', () => {
        currentVideoIndex = (currentVideoIndex + 1) % videoUrls.length;
        updateVideo();
    });

    document.querySelector('.prev').addEventListener('click', () => {
        currentVideoIndex = (currentVideoIndex - 1 + videoUrls.length) % videoUrls.length;
        updateVideo();
    });

    function updateVideo() {
        document.querySelector('.video-wrapper iframe').src = videoUrls[currentVideoIndex];
    }