-- Table for User registration
CREATE TABLE users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role VARCHAR(255) NOT NULL
);

-- Table for courier details
CREATE TABLE courier (
    courier_id INT AUTO_INCREMENT PRIMARY KEY,
    sender_name VARCHAR(255) NOT NULL,
    sender_address VARCHAR(255) NOT NULL,
    sender_phone VARCHAR(255) NOT NULL,
    receiver_name VARCHAR(255) NOT NULL,
    receiver_address VARCHAR(255) NOT NULL,
    receiver_phone VARCHAR(255) NOT NULL,
    weight VARCHAR(255) NOT NULL,
    status VARCHAR(255),
    agent_id INT,
    FOREIGN KEY (agent_id) REFERENCES agent(agent_id)
);

-- Table for SMS messages
CREATE TABLE sms (
    sms_id INT AUTO_INCREMENT PRIMARY KEY,
    from_number VARCHAR(255) NOT NULL,
    to_number VARCHAR(255) NOT NULL,
    message VARCHAR(255) NOT NULL,
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table for agents
CREATE TABLE agent (
    agent_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    address VARCHAR(255) NOT NULL,
    phone VARCHAR(255) NOT NULL,
    branch VARCHAR(255) NOT NULL
);

-- Table for customers
CREATE TABLE customer (
    customer_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    address VARCHAR(255) NOT NULL,
    phone VARCHAR(255) NOT NULL
);



-- Table for tracking consignment number
CREATE TABLE track (
    track_id INT AUTO_INCREMENT PRIMARY KEY,
    consignment_number VARCHAR(255) NOT NULL,
    status VARCHAR(255) NOT NULL,
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
