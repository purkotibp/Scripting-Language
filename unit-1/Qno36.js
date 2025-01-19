// Function to set cookie with key and value
const setCookie = (key, value) => {
  document.cookie = `${key}=${value}`;
};

// Function to get cookie value by key
const getCookie = (key) => {
  const cookies = document.cookie.split(";");
  for (let cookie of cookies) {
    const [cookieKey, cookieValue] = cookie.split("=");
    if (cookieKey.trim() === key) {
      return cookieValue;
    }
  }
  return null;
};

// Function to display all cookies in tabular format
const displayAllCookies = () => {
  const cookies = document.cookie.split(";");
  console.table(
    cookies.map((cookie) => {
      const [key, value] = cookie.split("=");
      return { Key: key.trim(), Value: value };
    })
  );
};

// Function to delete cookie by key
const deleteCookie = (key) => {
  document.cookie = `${key}=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;`;
};

// Function to delete all cookies
const deleteAllCookies = () => {
  const cookies = document.cookie.split(";");
  for (let cookie of cookies) {
    const key = cookie.split("=")[0].trim();
    deleteCookie(key);
  }
};