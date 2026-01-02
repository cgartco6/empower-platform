import time
from core.governor import GovernorAI
from config import LOOP_INTERVAL_SECONDS

governor = GovernorAI()

while True:
    result = governor.run_cycle()
    print(result)
    time.sleep(LOOP_INTERVAL_SECONDS)
