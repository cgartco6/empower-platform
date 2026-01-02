def convert(amount, from_currency, to_currency):
    rate = get_live_rate(from_currency, to_currency)
    return round(amount * rate, 2)
