import datetime
import random

class HumanMessageAI:
    def build(self):
        today = datetime.date.today()

        messages = [
            "Hi everyone 🌸 I found a small course that actually explains things properly. It’s R29 today and helped me understand online skills without stress.",
            "Sharing this for anyone who needs something real. South African platform, no scams, very simple. I wish I saw this earlier.",
            "If you have a phone and WhatsApp, you can do this. R29 today. Nothing fancy, just learning.",
            "Not selling anything big here, just sharing what helped me. Small course, big confidence boost."
        ]

        return f"""
DATE: {today}

WHATSAPP / FB POST:
{random.choice(messages)}

FOLLOW-UP (24h later):
"I checked again today, still worth it honestly. If you were unsure yesterday, maybe have a look now."

DM REPLY:
"Yes it’s legit, I paid and got access immediately. No pressure at all."
"""
