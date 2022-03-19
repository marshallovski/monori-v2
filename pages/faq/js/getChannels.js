async function getChannels() {
    let url = `${window.location.protocol}//${window.location.href}/core/channels.json`;
    let response = await fetch(url);
    let res = await response.json();

    console.log(res);
}

window.onload = async () => {
    console.log('Фетчим каналы...');
    try {
        await getChannels();
    } catch (e) {
        alert('Ошибка при получении списка каналов!');
        return console.log(e);
    }
}