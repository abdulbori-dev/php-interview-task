# PHP Interview Task Script

Bu loyiha test API bilan ishlash va PHP orqali HTTP-kommunikatsiya ko‘nikmalarini ko‘rsatish uchun yozilgan.

## Vazifa

1. **Birinchi so‘rov**
    - `POST` yuboriladi: `https://test.icorp.uz/private/interview.php`
    - JSON: `{"msg": "...", "uri": "..."}`
    - Javob: `part1` va `next_uri`

2. **Ikkinchi so‘rov**
    - `GET` orqali `next_uri` ga murojaat qilinadi
    - Javob: `part2`

3. **Yakuniy so‘rov**
    - `part1` + `part2` → `code` sifatida birlashtiriladi
    - Shu kod qayta `POST` qilinadi
    - Javob: yakuniy xabar

---

## Muammolar / Extimoliy xatoliklar

1. **API dagi muammolar**
    - Menga berilgan API da faqat data1 qaytmoqda uri qaytmayabdi
    - API to'g'ri ishlasa kod ham o'z vazifasini ishlaydi
2. **Yakuniy so'rovda javob xato kelib qolishi**
    - Yakuniy so'rovni test qila olmadim, sababini yuqorida aytib o'tdim

---

## Ishga tushirish

### Talablar:
- PHP 7.4+ yoki PHP 8.x
- cURL kengaytmasi yoqilgan bo‘lishi kerak

### Konsolda ishga tushirish:
```bash
php interview.php

