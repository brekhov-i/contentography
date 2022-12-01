export default function useWebp() {

  const getWebp = (url) => {
    if(url === "") {
      return "";
    }
    return url.split(/.png|.jpg|.jpeg/)[0] + ".webp";
  };

  return {
    getWebp
  }
}