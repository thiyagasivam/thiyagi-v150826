import re

# Expected district counts for each state/UT
expected = {
    'tamil-nadu': 38,
    'andhra-pradesh': 13,
    'arunachal-pradesh': 25,
    'assam': 35,
    'bihar': 38,
    'chhattisgarh': 33,
    'goa': 2,
    'gujarat': 33,
    'haryana': 22,
    'himachal-pradesh': 12,
    'jharkhand': 24,
    'karnataka': 31,
    'kerala': 14,
    'madhya-pradesh': 55,
    'maharashtra': 36,
    'manipur': 16,
    'meghalaya': 11,
    'mizoram': 11,
    'nagaland': 12,
    'odisha': 30,
    'punjab': 23,
    'rajasthan': 50,
    'sikkim': 6,
    'telangana': 33,
    'tripura': 8,
    'uttar-pradesh': 75,
    'uttarakhand': 13,
    'west-bengal': 23
}

# Read the file
with open('district.php', 'r', encoding='utf-8') as f:
    content = f.read()

# Count districts for each state
current_state = None
district_counts = {}

for line in content.split('\n'):
    state_match = re.match(r"^\s+'([a-z\-]+)'\s*=>\s*\[\s*$", line)
    if state_match:
        state = state_match.group(1)
        if state in expected:
            current_state = state
            district_counts[state] = 0
    
    if current_state and re.match(r"^\s+'[a-z\-]+'\s*=>\s*\[\s*$", line) and state_match is None:
        district_counts[current_state] += 1

print('DISTRICT COVERAGE ANALYSIS')
print('=' * 80)
print(f'{"State":<30} {"Current":<10} {"Expected":<10} {"Missing":<10} {"Status":<10}')
print('-' * 80)

missing_states = []
for state in sorted(expected.keys()):
    current = district_counts.get(state, 0)
    exp = expected[state]
    missing = exp - current
    status = 'Complete' if missing == 0 else f'{missing} missing'
    print(f'{state:<30} {current:<10} {exp:<10} {missing:<10} {status:<10}')
    if missing > 0:
        missing_states.append((state, missing))

print('=' * 80)
total_current = sum(district_counts.values())
total_expected = sum(expected.values())
total_missing = total_expected - total_current
print(f'{"TOTAL":<30} {total_current:<10} {total_expected:<10} {total_missing:<10}')
print()
print('States with missing districts (sorted by most missing):')
for state, missing in sorted(missing_states, key=lambda x: x[1], reverse=True):
    print(f'  {state}: {missing} districts missing')
