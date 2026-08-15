CREATE TABLE IF NOT EXISTS honorservicecenter (
    shop_name VARCHAR(100) NOT NULL,
    slug VARCHAR(100) UNIQUE NOT NULL,
    address VARCHAR(255) NOT NULL,
    phonenumber VARCHAR(20)
);

-- Sample data
INSERT INTO honorservicecenter (shop_name, slug, address, phonenumber) VALUES
('Honor Service Center Mumbai', 'honor-service-center-mumbai', 'Shop No. 15, Ground Floor, Phoenix Mall, Kurla West, Mumbai - 400070', '+91-22-98765432'),
('Honor Care Delhi', 'honor-care-delhi', 'A-25, Connaught Place, New Delhi - 110001', '+91-11-87654321'),
('Honor Authorized Service Bangalore', 'honor-authorized-service-bangalore', '1st Floor, Brigade Road, Bangalore - 560025', '+91-80-76543210');
