from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.common.by import By
from selenium.webdriver.support import expected_conditions as EC
from selenium.webdriver.support.ui import WebDriverWait




driver = webdriver.Chrome()
driver.get("http://127.0.0.1:8000/search")
search = WebDriverWait(driver,20).until(EC.element_to_be_clickable((By.NAME,'search')))
search.send_keys("KIA")

clickBtn =  WebDriverWait(driver,20).until(EC.element_to_be_clickable((By.ID,'search')))
clickBtn.click()