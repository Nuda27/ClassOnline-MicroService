const { User } = require('../../../models');

module.exports = async (req, res) => {
    const id = req.params.id;

    const user = await User.findByPk(id, {
        attributes: ['id', 'name', 'email', 'role', 'profession', 'avatar']
    });

    if(!user)
    {
        return res.status(404).json({
            status: 'Error',
            message: 'User Not Found'
        });
    }

    return res.json({
        status: 'Success',
        data: user
    });
}