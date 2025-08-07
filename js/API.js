import openai

openai.api_key = "YOUR_API_KEY"

response = openai.ChatCompletion.create(
    model="gpt-4",
    messages=[
        {"role": "user", "content": "E-ticaret için popüler anahtar kelimeler önerir misin?"}
    ]
)

print(response['choices'][0]['message']['content'])
